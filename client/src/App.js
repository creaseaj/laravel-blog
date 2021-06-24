import React,{useState, useEffect} from 'react';

const App = () => {
    const [data, setData] = useState([]);
    const [atad, setAtad] = useState([]);


    useEffect(async() => {
        //loadData();
            fetch('http://localhost/api/posts')
  .then(response => response.json())
  .then(data => setAtad(data));
      }, [])

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
      return (
          <div class="grid grid-cols-3">
          {atad.map((r,id) => (
                <Post author={r.author.name} title={r.title} body={r.body}/>
          ))}
          </div>
          )
}

export default App;
