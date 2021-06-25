import React,{useState, useEffect} from 'react';
import CategoriesDiv from './categories';

const Header = (props) => {
    const [categories, setCategories] = useState([]);
    const [showCat, setShowCat] = useState(false)
    useEffect(async() => {
        fetch('http://localhost/api/categories')
            .then(response => response.json())
            .then(data => setCategories(data));
    },[])
    console.log(categories);
    return (
    <header class="max-w-xl mx-auto mt-20 text-center mb-10">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>

        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
            <button class="m-2 py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex bg-gray-100 hover:bg-gray-300 rounded" onClick={() => setShowCat(!showCat)}>Categories</button>
            <button class="m-2 py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex bg-gray-100 hover:bg-gray-300 rounded" onClick={() => props.setCounter(props.counter + 1)}>More</button>
            <button class="m-2 py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex bg-gray-100 hover:bg-gray-300 rounded" onClick={() => props.setCounter(props.counter - 1)}>Fewer</button>
            {showCat ? (<CategoriesDiv categories={categories} />) : null}
            
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="#">
                    <input type="text" name="search" placeholder="Find something"
                        value="Search Here"
                        class="bg-transparent placeholder-black font-semibold text-sm" />
                </form>
            </div>
        </div>
    </header>
    )
}
export default Header
