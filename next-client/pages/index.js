import Head from 'next/head'
import React,{useState, useEffect} from 'react';
import 'tailwindcss/tailwind.css'
import PostGrid from '../components/postGrid';
import Post from '../components/post';
import Header from '../components/header';


const Home = () => {
    const [data, setData] = useState([]);
    useEffect(async() => {
        fetch('http://localhost/api/posts')
            .then(response => response.json())
            .then(data => setData(data));
    },[])
    if(data == null){
        console.log(data);
        return (
            <PostGrid posts={data} />
            )
    }
    else {
        return (<p>Loading ... </p>)
    }
      
}
export default Home;
