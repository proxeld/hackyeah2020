import React, {Component} from 'react'
import PropTypes from 'prop-types'
import sortBy from 'lodash/sortBy'
import {List} from 'immutable'

import {DEFAULT_DASHBOARD_FINANCE_CHART_FILTERS, LAST_12_MONTHS} from '../../utils/GlobalConfig'
import {filterEntries} from '../../utils/GlobalHelper'
import VoucherDaysChart from './VoucherDaysChart'
import DashboardPortlet from '../Dashboard/DashboardPorlet'

class VouchersChartWidget extends Component {
  constructor(props) {
    super(props)
    this.selectArticlesFilter = ::this.selectArticlesFilter
    this.state = {
      activeArticlesFilter: {
        value: LAST_12_MONTHS
      }
    }
  }

  selectArticlesFilter(filter) {
    this.setState({
      activeArticlesFilter: filter
    })
  }

  render() {
    const {activeArticlesFilter} = this.state
    const {chartEntries, dateField = 'date', title = 'Voucher Statistics'} = this.props
    const filters = DEFAULT_DASHBOARD_FINANCE_CHART_FILTERS
    const activeArticles = activeArticlesFilter || filters[0]

    let filteredArticles = filterEntries(chartEntries, activeArticles, {
      dateField
    })
    const sortedArticles = sortBy(filteredArticles.map((item) => (
      item.toObject()
    )).toArray(), 'name', 'asc')

    if (sortedArticles.length < 0) {
      return null
    }

    const articlesActions = (
      <ul className="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand">
        {filters.map((filter) => (
          <li className={`nav-item filter ${filter.value === activeArticlesFilter.value ? ' active' : ''}`}
              key={filter.value}
              onClick={() => this.selectArticlesFilter(filter)}>
            <a className="nav-link">
              {filter.name}
            </a>
          </li>
        ))}
      </ul>)

    return (<DashboardPortlet title={title} actions={articlesActions}>
      <VoucherDaysChart entries={sortedArticles}/>
    </DashboardPortlet>)
  }
}

VouchersChartWidget.propTypes = {
  chartEntries: PropTypes.instanceOf(List),
  dateField: PropTypes.string,
  title: PropTypes.string
}

export default VouchersChartWidget
