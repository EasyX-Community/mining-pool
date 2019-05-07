import React, { createContext, Component } from 'react'

export const LayoutContext = createContext({
  collapsed: false,
  onCollapse: () => {},
})

export const LayoutConsumer = ({ children }) => (
  <LayoutContext.Consumer>{value => children(value)}</LayoutContext.Consumer>
)

export class LayoutProvider extends Component {
  onCollapse = collapsed => {
    console.log(collapsed)
    this.setState({ collapsed })
  }

  state = {
    collapsed: false,
    onCollapse: this.onCollapse,
  }

  render() {
    return (
      <LayoutContext.Provider value={this.state}>
        {this.props.children}
      </LayoutContext.Provider>
    )
  }
}

export const withLayoutConsumer = WrappedComponent => {
  class HOC extends Component {
    render() {
      const rest = this.props
      return (
        <LayoutConsumer>
          {props => <WrappedComponent {...props} {...rest} />}
        </LayoutConsumer>
      )
    }
  }

  return HOC
}

export const withLayoutProvider = WrappedComponent => {
  class HOC extends Component {
    render() {
      const rest = this.props
      return (
        <LayoutProvider>
          <WrappedComponent {...rest} />
        </LayoutProvider>
      )
    }
  }

  return HOC
}
