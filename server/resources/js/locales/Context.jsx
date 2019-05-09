import React, { Component, createContext } from 'react'
import translations from './index'
/**
 * Define Context for Modals
 */
export const LocaleContext = createContext({
  locale: 'en',
  messages: {},
  setLocale: () => {},
})

export const LocaleConsumer = LocaleContext.Consumer

export class LocaleProvider extends Component {
  setLocale = locale => {
    this.setState({
      locale,
      messages: translations[locale]
    })
  }

  state = {
    locale: 'en',
    setLocale: this.setLocale,
    messages: translations['en'],
  }

  render() {
    return (
      <LocaleContext.Provider value={this.state}>
        {this.props.children}
      </LocaleContext.Provider>
    )
  }
}
