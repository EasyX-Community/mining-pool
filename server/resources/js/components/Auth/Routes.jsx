import React, { lazy } from 'react'
import { Switch, Route } from 'react-router-dom'
import { compose } from 'recompose'
import withSuspense from '@helpers/withSuspense'

const Login = lazy(() => import('./Login'))
const RedirectComponent = lazy(() => import('./RedirectComponent'))
// const Register = lazy(() => import('./Register'))

export const Routes = () => (
  <Switch>
    <Route path="/" component={Login} />
    <Route path="/login" component={Login} />
    <Route component={RedirectComponent} />
    {/* <Route path="/login" component={Reguster} /> */}
  </Switch>
)

export default compose(withSuspense)(Routes)
