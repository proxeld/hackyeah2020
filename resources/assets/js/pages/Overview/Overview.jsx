import Helmet from 'react-helmet'
import React, { Fragment } from 'react'
import { connect } from 'react-redux'

import { NeutralButton } from 'components'
import { currentUserSelector } from 'store/selectors/session'
import { Link } from "react-router-dom";

const OverviewComponent = ({props}) => {
  return (
    <Fragment>
      <Helmet>
        <title>Dashboard</title>
      </Helmet>

      <h2 className="text-center mb-5">Hello!</h2>

      <div className="mt-4 text-center">
        <Link to="/settings/user">
          <NeutralButton>
            Go to settings
          </NeutralButton>
        </Link>
      </div>
    </Fragment>
  )
}

export default connect(
  (state) => ({
    user: currentUserSelector(state)
  })
)(OverviewComponent)
