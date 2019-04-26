import React from 'react'
import { Modal } from 'antd'
import Markdown from 'react-markdown'
import CodeBlock from '../CodeBlock'
import QuickStartContent from '@content/QuickStart.md'

export const QuickStart = ({ isOpen, onRequestClose }) => (
  <Modal
    title="Quick Start"
    centered
    visible={isOpen}
    onOk={() => onRequestClose()}
    onCancel={() => onRequestClose()}
    width={820}
  >
    <Markdown source={QuickStartContent} renderers={{ code: CodeBlock }} />
  </Modal>
)

export default QuickStart
