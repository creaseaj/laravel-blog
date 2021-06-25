import React,{useState, useEffect} from 'react';
import CategoriesDiv from './categories';

const Header = () => {
    const [categories, setCategories] = useState([]);
    const [showCat, setShowCat] = useState(false)
    useEffect(async() => {
        fetch('http://localhost/api/categories')
            .then(response => response.json())
            .then(data => setCategories(data));
    },[])
    return (
    <header className="max-w-xl mx-auto mt-20 text-center mb-10">
        <h1 className="text-4xl">
            Latest <span className="text-blue-500">Laravel From Scratch</span> News
        </h1>

        <div className="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <div classNameName="w-32 relative items-center flex-col lg:inline-flex bg-gray-100 rounded-xl">
            <button className="py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex " onClick={() => setShowCat(!showCat)}>Categories</button>
            {showCat ? (<CategoriesDiv categories={categories} />) : null}
        </div>

            <button className="m-2 py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex bg-gray-100 hover:bg-gray-300 rounded" onClick={() => props.setCounter(props.counter + 1)}>More</button>
            <button className="m-2 py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex bg-gray-100 hover:bg-gray-300 rounded" onClick={() => props.setCounter(props.counter - 1)}>Fewer</button>
        </div>
    </header>
    )
}
export default Header
