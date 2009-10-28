# encoding: utf-8

# =============================================================================
# package info
# =============================================================================
NAME = 'symmetrics_module_agreement'

TAGS = ('magento', 'config', 'german', 'agb', 'agreement', 'germanconfig', 'locpack')

LICENSE = 'AFL 3.0'

HOMEPAGE = 'http://www.symmetrics.de'

INSTALL_PATH = ''

# =============================================================================
# responsibilities
# =============================================================================
TEAM_LEADER = {
    'Sergej Braznikov': 'sb@symmetrics.de'
}

MAINTAINER = {
    'Eugen Gitin': 'eg@symmetrics.de'
}

AUTHORS = {
    'Eugen Gitin': 'eg@symmetrics.de'
}

# =============================================================================
# additional infos
# =============================================================================
INFO = 'Rendering füs AGB-Feld in der Bestellung'

SUMMARY = '''
    Fügt die Möglichkeit hinzu in den AGBs am Ende der Bestellung
    {{block ... }} Variablen zu verwenden. Sinnvoll ist die Verbindung
    zu dem Symmetrics_Impressum Modul
'''

NOTES = '''
'''

# =============================================================================
# relations
# =============================================================================
REQUIRES = [
	{'magento': '*', 'magento_enterprise': '*'}
]

EXCLUDES = {
}

DEPENDS_ON_FILES = (
    'app/code/core/Mage/Checkout/Block/Agreements.php',
    'app/code/core/Mage/Checkout/Model/Agreement.php'
)

PEAR_KEY = ''

COMPATIBLE_WITH = {
    'magento': ['1.3.2.1', '1.3.2.3', '1.3.2.4'],
	'magento_enterprise': ['1.3.2.4'],
}
