import Head from 'next/head'
import React,{useState, useEffect} from 'react';
import 'tailwindcss/tailwind.css'
import { useRouter } from 'next/router'
import Post from '../../components/post';
import Header from '../../components/header';
import PostGrid from '../../components/postGrid';

const Home = () => {
    const router = useRouter()
    console.log(router.query)
    const [data, setData] = useState([]);
    
    useEffect(async() => {
        if(!router.query.slug){
            return
        }
        fetch('http://localhost/api/categories/' + router.query.slug)
            .then(response => response.json()) 
            .then(data => setData(data));
        
    },[router.query.slug]);
    if(data.length > 0){
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
