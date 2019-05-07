import React from 'react'
import {
  login,
  refresh,
  logout,
  register,
  checkDomain,
  updatePassword,
  forgotPassword,
  check,
} from '@graphql/Auth.gql'

export function withAuth(Component) {
  return function WrapperComponent(props) {
    return (
      <AppContext.Consumer>
        {state => <Component {...props} context={state} />}
      </AppContext.Consumer>
    )
  }
}
