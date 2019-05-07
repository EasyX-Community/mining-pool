import React, { lazy } from 'react'
import { Switch, Route } from 'react-router-dom'
import { withRouter } from 'react-router'
import { compose } from 'recompose'
import withSuspense from '@helpers/withSuspense'

const Dashboard = lazy(() => import('@pages/Dashboard'))
const Wallet = lazy(() => import('@pages/Wallet'))
const Exception = lazy(() => import('@/components/Exceptions'))

export const Routes = () => (
  <Switch>
    {/* Base Routes */}
    <Route exact path="/" component={Dashboard} />
    <Route path="/wallet" component={Wallet} />
    <Route component={Exception} />

    {/* Admin Routes */}
  </Switch>
)

export default compose(
  withRouter,
  withSuspense
)(Routes)
