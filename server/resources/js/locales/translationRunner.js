const manageTranslations = require('react-intl-translations-manager').default

manageTranslations({
  messagesDirectory: 'resources/js/locales/messages',
  translationsDirectory: 'resources/js/locales/translations/',
  languages: ['en', 'de', 'fa'], // any language you need
})
