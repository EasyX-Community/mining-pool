import React from 'react'
import { Table } from 'antd'
import { Query } from 'react-apollo'
import GET_ALGORITHMS from '@graphql/Algorithms.graphql'

const columns = [
  {
    title: 'Algorithm',
    dataIndex: 'name',
    key: 'name',
    sorter: (a, b) => a.name.localeCompare(b.name),
  },
  {
    title: 'Port',
    dataIndex: 'port',
    key: 'port',
    sorter: (a, b) => a.port - b.port,
  },
  {
    title: 'Coins',
    dataIndex: 'coins',
    key: 'coins',
    sorter: (a, b) => a.cions - b.coins,
  },
  {
    title: 'Miners',
    dataIndex: 'miners',
    key: 'miners',
    sorter: (a, b) => a.miners - b.miners,
  },
  {
    title: 'Hashrate',
    dataIndex: 'hashrates',
    key: 'hashrates',
    sorter: (a, b) => a.hashrates - b.hashrates,
  },
]

function onChange(pagination, filters, sorter) {
  console.log('params', pagination, filters, sorter)
}

class PoolStatus extends React.Component {
  state = {
    page: 1,
    count: 10,
    term: undefined,
  }

  transformAlgorithms = data => {
    return data
      ? data.algorithms.data.reduce((carry, algorithm, index) => {
          carry.push({
            key: index,
            name: algorithm.name,
            hashrates: algorithm.averageHashRate + 'h/s',
            coins: algorithm.coinCount,
            port: algorithm.port,
          })
          return carry
        }, [])
      : []
  }

  render() {
    return (
      <Query
        query={GET_ALGORITHMS}
        variables={{
          page: this.state.page,
          count: this.state.count,
        }}
      >
        {({ data, loading, error }) => {
          const paginatorInfo =
            !loading && !error ? data.algorithms.paginatorInfo : {}
          const algorithms =
            !loading && !error ? this.transformAlgorithms(data) : []
          return (
            <React.Fragment>
              <Table
                columns={columns}
                onChange={onChange}
                dataSource={algorithms}
                loading={loading}
                onChange={(pagination, filters, sorter) => {
                  this.setState({
                    count: pagination.pageSize,
                    page: pagination.current,
                  })
                }}
                pagination={{
                  total: paginatorInfo.total,
                  pageSize: this.state.count,
                  showSizeChanger: true,
                  pageSizeOptions: ['10', '20', '30', '50', '100'],
                }}
              />
            </React.Fragment>
          )
        }}
      </Query>
    )
  }
}

export default PoolStatus
