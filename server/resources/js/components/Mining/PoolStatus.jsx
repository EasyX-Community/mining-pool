import React from 'react'
import { Table } from 'antd'
import gql from 'graphql-tag'
import { Query } from 'react-apollo'
import { fromJS } from 'immutable'

const columns = [{
  title: 'Algorithm',
  dataIndex: 'algorithm',
  onFilter: (value, record) => record.name.indexOf(value) === 0,
  sorter: (a, b) => a.name.length - b.name.length,
  sortDirections: ['descend'],
}, {
  title: 'Port',
  dataIndex: 'port',
  defaultSortOrder: 'descend',
  sorter: (a, b) => a.age - b.age,
}, {
  title: 'Coins',
  dataIndex: 'coins',
  filterMultiple: false,
  onFilter: (value, record) => record.address.indexOf(value) === 0,
  sorter: (a, b) => a.address.length - b.address.length,
  sortDirections: ['descend', 'ascend'],
},
{
  title: 'Miners',
  dataIndex: 'miners',
  sorter: (a, b) => a.address.length - b.address.length,
  sortDirections: ['descend', 'ascend'],
},
{
  title: 'Hashrate',
  dataIndex: 'hashrate',
  sorter: (a, b) => a.address.length - b.address.length,
  sortDirections: ['descend', 'ascend'],
}


];

const data = [{
  key: '1',
  name: 'John Brown',
  age: 32,
  address: 'New York No. 1 Lake Park',
}, {
  key: '2',
  name: 'Jim Green',
  age: 42,
  address: 'London No. 1 Lake Park',
}, {
  key: '3',
  name: 'Joe Black',
  age: 32,
  address: 'Sidney No. 1 Lake Park',
}, {
  key: '4',
  name: 'Jim Red',
  age: 32,
  address: 'London No. 2 Lake Park',
}];

function onChange(pagination, filters, sorter) {
  console.log('params', pagination, filters, sorter);
}

class PoolStatus extends React.Component {

  transformAlgorithms = ({algorithms}) => {
    return algorithms.data.reduce((carry, algorithm, index) => {
      console.log(algorithm, index)
      carry[index].key = index
      return carry
    }, [])
    return []
  }

  render() {
    return (
      <Query query={gql`
          {
            algorithms(count: 10){
              data{
                name
                rent
                averageHashRate1h
                averageHashRate30d
                averageHashRate24h
              }
            }
          }
      `}>
        {({ data, loading }) => {
          const algorithms = !loading && this.transformAlgorithms(data)
          return(
          <div>
            <Table columns={columns} onChange={onChange} dataSource={algorithms} loading={loading} pagination={false}/>
          </div>)
        }}
      </Query>
    )
  }
}


export default PoolStatus