import React, { useEffect } from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App.js';
class Trial extends React.Component {
    constructor(props) {
        super(props);
        this.props = {
            times: 0,
            posts: [],
        }

    }
    render () {
        fetch('http://localhost/api/posts').then(response => response.json()).then(data => console.log(data[0]));;

        return(<p>Test {this.props.times}</p>)
    }
}
  // ========================================

  ReactDOM.render(
    <App />,
    document.getElementById('root')
  );
