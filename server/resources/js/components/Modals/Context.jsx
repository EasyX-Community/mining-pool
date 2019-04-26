import React, { Component, createContext } from 'react'

/**
 * Define Context for Modals
 */
export const ModalContext = createContext({
  /**
   * Modal Visibility
   */
  props: {},

  /**
   * Which modal to show, (i.e. QuickStart)
   */
  component: null,

  /**
   * var @string component
   */
  showModal: () => {},

  /**
   * @void
   */
  hideModal: () => {},
})

export const ModalConsumer = ModalContext.Consumer

export class ModalProvider extends Component {
  showModal = (component, props = {}) => {
    this.setState({
      component,
      props,
    })
  }

  hideModal = () =>
    this.setState({
      component: null,
      props: {},
    })

  state = {
    component: null,
    props: {},
    showModal: this.showModal,
    hideModal: this.hideModal,
  }

  render() {
    return (
      <ModalContext.Provider value={this.state}>
        {this.props.children}
      </ModalContext.Provider>
    )
  }
}

export const ModalRoot = () => (
  <ModalConsumer>
    {({ component: Component, props, hideModal }) =>
      Component ? <Component {...props} onRequestClose={hideModal} /> : null
    }
  </ModalConsumer>
)

export const withModalProvider = WrappedComponent => {
  class HOC extends Component {
    render() {
      return (
        <ModalProvider>
          <WrappedComponent />
        </ModalProvider>
      )
    }
  }

  return HOC
}

export const withModalConsumer = WrappedComponent => {
  class HOC extends Component {
    render() {
      return (
        <ModalConsumer>
          {props => <WrappedComponent {...props} />}
        </ModalConsumer>
      )
    }
  }

  return HOC
}
