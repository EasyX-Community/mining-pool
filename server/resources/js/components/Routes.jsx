import React, { lazy, Suspense } from 'react'
import { Switch, Route } from 'react-router-dom'

const Dashboard = lazy(() => import('@pages/Dashboard'))
const Wallet = lazy(() => import('@pages/Wallet'))
const Exception = lazy(() => import('@/components/Exceptions'))

export default () => (
  <Switch>
    <Route exact path="/" component={Dashboard} />
    <Route path="/wallet" component={Wallet} />
    <Route component={Exception} />
  </Switch>
)
