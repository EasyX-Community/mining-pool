import { addLocaleData } from 'react-intl'

import en from './translations/en.json'
import de from './translations/de.json'
import fa from './translations/fa.json'

import enLocaleData from 'react-intl/locale-data/en'
import deLocaleData from 'react-intl/locale-data/de'

export const localeData = [enLocaleData, deLocaleData]

export const addAppLocaleData = () =>
  localeData.forEach(locale => addLocaleData(locale))

export { LocaleProvider, LocaleConsumer } from './Context'

export default { en, de, fa }
