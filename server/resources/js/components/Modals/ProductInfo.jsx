import React from 'react'
import { Modal } from 'antd'

export const ProductInfo = ({ isOpen, onRequestClose }) => (
  <Modal
    title="Quick Start"
    centered
    visible={isOpen}
    onOk={() => onRequestClose()}
  >
    <p>some contents...</p>
  </Modal>
)

export default ProductInfo
