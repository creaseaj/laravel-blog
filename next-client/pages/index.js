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
            .then(data => console.log(data));
    },[])

        return (
            <div>
            <Header />
            <PostGrid posts={data} />
            </div>
            )


}
export default Home;
