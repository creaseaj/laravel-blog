import React,{useState, useEffect} from 'react';

const Post = ({author,title,body}) => {
    return(
        <div class="m-4 py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">{title}</h2>
                <p class="mt-2 text-gray-600">{body}</p>
            </div>
            <div class="flex justify-end mt-4">
                <p  class="text-xl font-medium text-indigo-500">{author}</p>
            </div>
        </div>
    )
}

const App = () => {
    const [counter, setCounter] = useState(4);
    const [data, setData] = useState([]);
    useEffect(async() => {
        fetch('http://localhost/api/posts')
            .then(response => response.json())
            .then(data => setData(data));
    },[])

      return (
          <div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onClick={() => setCounter(counter + 1)}>Show More</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onClick={() =>setCounter(counter - 1)}>Show Less</button>
          <div class="grid grid-cols-3">
          {data.slice(0,counter).map((r,id) => (
                <Post author={r.author.name} title={r.title} body={r.body}/>
          ))}
          </div>
          </div>
          )
}

export default App;
