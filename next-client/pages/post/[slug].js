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
    const [post, setPost] = useState([]);

    useEffect(async() => {
        if(!router.query.slug){
            return
        }
        fetch('http://localhost/api/post/' + router.query.slug)
            .then(response => response.json())
            .then(data => setPost(data));

    },[router.query.slug]);
    console.log('http://localhost/api/post/' +router.query.slug);
        return (
            <div>Hi!</div>
            )

}
export default Home;
