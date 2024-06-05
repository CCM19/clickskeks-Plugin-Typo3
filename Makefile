# Ziel, das ausgeführt wird, wenn 'make' ohne Argumente aufgerufen wird
all: package

# Die PHP-Datei, die die Versionsnummer enthält
VERSION_FILE = ext_emconf.php

# Extrahiert die Versionsnummer aus der PHP-Datei
VERSION = $(shell grep -oP "(?<=version' => ')[^']+" $(VERSION_FILE))

# Der Name der ZIP-Datei, die erstellt wird
ZIP_FILE = clickskeks_$(VERSION).zip

# Alle Dateien und Verzeichnisse, die ins ZIP-Archiv aufgenommen werden sollen
FILES_TO_ZIP = *

# Ziel 'package': erstellt das ZIP-Archiv
package: $(ZIP_FILE)

$(ZIP_FILE): $(FILES_TO_ZIP)
	@echo "Erstelle $(ZIP_FILE) mit Version $(VERSION)"
	zip -r $(ZIP_FILE) $(FILES_TO_ZIP) -x '*.git*' '*.idea*' 'Makefile'

# Ziel 'clean': löscht das erstellte ZIP-Archiv
clean:
	rm -f *.zip

.PHONY: all package clean
