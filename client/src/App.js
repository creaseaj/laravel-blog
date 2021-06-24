import React,{useState, useEffect} from 'react';
import './App.css';

const App = () => {
    const [data, setData] = useState({ hits: [] });
    useEffect(async() => {
        loadData();
      }, [])
    const loadData = async() => {
        const response = await fetch('http://localhost/api/posts');
        const data = await response.json();
        setData(data);
    }
    console.log(data[0]['id']);
      return (
    <p>Test {data[0]['id']}</p>
  );
}

export default App;
