import React from 'react'
import { Table, Pagination } from 'antd'
import gql from 'graphql-tag'
import { Query } from 'react-apollo'

const columns = [
  {
    title: 'Algorithm',
    dataIndex: 'name',
    key: 'name',
  },
  {
    title: 'Port',
    dataIndex: 'port',
    key: 'port',
  },
  {
    title: 'Coins',
    dataIndex: 'coins',
    key: 'coins',
  },
  {
    title: 'Miners',
    dataIndex: 'miners',
    key: 'miners',
  },
  {
    title: 'Hashrate',
    dataIndex: 'hashrates',
    key: 'hashrates',
  },
]

function onChange(pagination, filters, sorter) {
  console.log('params', pagination, filters, sorter)
}

class PoolStatus extends React.Component {
  state = {
    page: 1,
    count: 20,
    term: undefined,
  }

  transformAlgorithms = data => {
    return data.algorithms.data.reduce((carry, algorithm, index) => {
      carry.push({
        key: index,
        name: algorithm.name,
        hashrates: algorithm.averageHashRate + 'h/s',
        coins: algorithm.coinCount,
        port: algorithm.port,
      })
      return carry
    }, [])
  }

  render() {
    return (
      <Query
        query={gql`
          query Algorithms($count: Int!, $page: Int) {
            algorithms(count: $count, page: $page) {
              data {
                name
                coinCount
                averageHashRate
                port
              }
              paginatorInfo {
                currentPage
                count
                hasMorePages
                lastItem
                lastPage
                perPage
                total
              }
            }
          }
        `}
        variables={{
          page: this.state.page,
          count: this.state.count,
        }}
      >
        {({ data, loading, error }) => {
          const paginatorInfo = !loading ? data.algorithms.paginatorInfo : {}
          const algorithms = !loading ? this.transformAlgorithms(data) : []
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
                  pageSizeOptions: ['10', '20', '30'],
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
