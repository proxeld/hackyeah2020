import React, {Component} from 'react'
import PropTypes from 'prop-types'
import {CartesianGrid, Legend, Line, LineChart, ResponsiveContainer, Tooltip, XAxis, YAxis} from 'recharts'

class VoucherDaysChart extends Component {
  render() {
    const data = this.props.entries
    const strokeWidth = 2

    if (data.length === 0) {
      return null
    }

    return (
      <ResponsiveContainer width='100%' aspect={4.0 / 2}>
        <LineChart data={data}
                   margin={{top: 5, right: 30, left: 20, bottom: 5}}>
          <XAxis dataKey="name"/>
          <YAxis interval={0} allowDecimals={false}/>
          <CartesianGrid strokeDasharray="3 3"/>
          <Tooltip/>
          <Legend/>
          <Line type="monotone" dataKey="articles" stroke="#82ca9d" strokeWidth={strokeWidth}/>
        </LineChart>
      </ResponsiveContainer>
    )
  }
}

VoucherDaysChart.propTypes = {
  entries: PropTypes.array
}

export default VoucherDaysChart
