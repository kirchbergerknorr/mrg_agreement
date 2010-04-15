* DOCUMENTATION

** INSTALLATION
Extrahieren Sie den Inhalt dieses Archivs in Ihr Magento Verzeichnis.

** USAGE
Das Modul erstellt Bestellbedingungen (AGBs und 
Widerrufsbelehrung), die vom Kunden am Ende der Bestellung
akzeptiert werden müssen. Zusützlich fügt das Modul
die Möglichkeit hinzu im Feld, in welchem im Checkout die
Texte angezeigt werden, Blockaufrufe wie {{block type ...}}
zu verwenden. Die Blocks selbst werden von diesem Modul
nicht erstellt. Diese müssen entweder manuell über
CMS - Static Blocks oder mithilfe des Moduls
Symmetrics_ConfigGermanTexts erstellt werden. Die 
Blocks (Identifier) muessen "mrg_business_terms"
und "mrg_revocation" heißen. 

Symmetrics_Agreement erstellt auch die CMS-Seiten
AGB und Widerruf, die mit Symmetrics_ConfigGermanTexts
oder manuell mit Texten gefüllt werden.

** FUNCTIONALITY
*** A: Aktiviert die Agreements in der Systemkonfiguration
*** B: Erstellt Seiten AGB und Widerruf
*** C: Erstellt Blöcke "mrg_business_terms" und
        "mrg_revocation"
*** D: Fügt Rendering für das Feld "Bestellbedingungen" im
        Checkout hinzu, sodass Aufrufe wie {{block .. }} dort
        verwendet werden koennen.
*** E: Bindet die unter b) erstellen Blöcke in den agreeements
        ein.

** TECHNINCAL
Überschreibt den Block Mage_Checkout_Model_Agreement und wendet
den Standardtemplate-Filter auf den Inhalt der Agreements an.
Via Migrationsskript werden die Seiten, Blöcke und Agreements
erstellt.

** PROBLEMS

* TESTCASES
** BASIC
*** A: Prüfen Sie ob die Option "Checkout/Options/Enable Agreements"
        aktiv ist und im Checkout-Review die entsprechenden Blöcke 
        angezeigt werden.
*** B: Prüfen Sie im Frontend und Backend die Existenz dieser Seiten
*** C: Prüfen Sie im Frontend und Backend die Existenz dieser Blöcke
*** D: Prüfen Sie, ob die {{block}} Aufrufe in den Agreement funktionieren,
        am besten zusammen mit Testcase d)
*** E: Prüfen Sie, ob in den Agreements die Blöcke "mrg_business_terms"
        und "mrg_revocation" via {{block}} Aufruf eingebunden werden und
        funktionieren.

** CATCHABLE

** STRESS