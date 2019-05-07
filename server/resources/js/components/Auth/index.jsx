import React, { createContext, Component } from 'react'
import { Route } from 'react-router-dom'
import { Query, compose } from 'react-apollo'
import { login } from '@graphql/Auth.graphql'
import { withCookies } from 'react-cookie'

export const AdminRoute = ({ component: Component, ...rest }) => (
  <AuthContext.Consumer>
    {auth => (
      <Route
        {...rest}
        render={props =>
          auth.isAdmin ? (
            <Component {...props} auth={auth} />
          ) : (
            <Redirect to="/login" />
          )
        }
      />
    )}
  </AuthContext.Consumer>
)

export const AuthContext = createContext({
  token: null,
  user: null,
  isAuthenticated: false,
  setToken: () => {},
  setUser: () => {},
  setIsAuthenticated: () => {},
})

export class AuthProvider extends Component {
  setToken = token => {
    this.setState({
      token,
    })
  }

  setUser = user => {
    this.setState({
      user,
    })
  }

  setIsAuthenticated = isAuthenticated => {
    console.log(this.props.cookies)
    this.props.cookies.set('isAuthenticated', isAuthenticated)
    this.setState({
      isAuthenticated,
    })
  }

  state = {
    token: null,
    isAuthenticated: false,
    user: null,
    setToken: this.setToken,
    setUser: this.setUser,
    setIsAuthenticated: this.setIsAuthenticated,
  }

  componentDidMount() {
    const { cookies } = this.props
    if (cookies.get('isAuthenticated')) {
      this.setIsAuthenticated(true)
    }
  }

  render() {
    const { children } = this.props
    console.log(this.state.xsrfToken)
    return (
      <AuthContext.Provider value={this.state}>{children}</AuthContext.Provider>
    )
  }
}

export function withAuth(Component) {
  return function WrapperComponent(rest) {
    return (
      <AuthConsumer>{props => <Component {...props} {...rest} />}</AuthConsumer>
    )
  }
}

export { default as AuthRoutes } from './Routes'
export const AuthConsumer = AuthContext.Consumer
export default compose(withCookies)(AuthProvider)
