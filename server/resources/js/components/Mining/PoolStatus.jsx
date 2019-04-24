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
          {
            algorithms(count: 10) {
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
      >
        {({ data, loading }) => {
          const paginatorInfo = !loading && data.algorithms.paginatorInfo
          const algorithms = !loading ? this.transformAlgorithms(data) : []
          console.log(paginatorInfo)
          return (
            <div>
              <Table
                columns={columns}
                onChange={onChange}
                dataSource={algorithms}
                loading={loading}
                pagination={false}
                pagination={{
                  onChange: () => {
                    console.log('test')
                  },
                  total: paginatorInfo.total,
                  defaultPageSize: 10,
                  showSizeChanger: true,
                  pageSizeOptions: ['10', '20', '30'],
                }}
              />
            </div>
          )
        }}
      </Query>
    )
  }
}

export default PoolStatus
