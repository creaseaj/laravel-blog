import React,{useState, useEffect} from 'react';
class App extends React.Component {

    constructor(props) {
        super(props);
        this.state = {
          clicks:  4,
        };
        this.increment = this.increment.bind(this)
        this.decrement = this.decrement.bind(this)
      }

      increment(){
        this.setState({
            clicks: this.state.clicks + 1,
        })
      }
      decrement(){
        this.setState({
            clicks: this.state.clicks - 1,
        })
      }
    render () {
        let clicks = this.state.clicks;
        return (
        <div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onClick={this.increment}>Show More</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onClick={this.decrement}>Show Less</button>
            <Posts items={clicks}/>
        </div>
        )
    }
}
const Posts = ({items}) => {
    const [data, setData] = useState([]);
    useEffect(async() => {
        //loadData();
        fetch('http://localhost/api/posts')
            .then(response => response.json())
            .then(data => setData(data));

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
          {data.slice(0,items).map((r,id) => (
                <Post author={r.author.name} title={r.title} body={r.body}/>
          ))}
          </div>
          )
}
// const App = () => {
//     const [data, setData] = useState([]);
//     const [atad, setAtad] = useState([]);

//     useEffect(async() => {
//         //loadData();
//             fetch('http://localhost/api/posts')
//   .then(response => response.json())
//   .then(data => setAtad(data));
//       })

//     const Post = ({author,title,body}) => {
//         return(
//             <div class="m-4 py-4 px-8 bg-white shadow-lg rounded-lg my-20">
//                 <div>
//                     <h2 class="text-gray-800 text-3xl font-semibold">{title}</h2>
//                     <p class="mt-2 text-gray-600">{body}</p>
//                 </div>
//                 <div class="flex justify-end mt-4">
//                     <p  class="text-xl font-medium text-indigo-500">{author}</p>
//                 </div>
//             </div>
//         )
//     }
//       return (
//           <div class="grid grid-cols-3"> <Counter /> <button onClick={console.log('hi')}>Test</button>
//           {atad.slice(0,10).map((r,id) => (
//                 <Post author={r.author.name} title={r.title} body={r.body}/>
//           ))}
//           </div>
//           )
// }

export default App;
