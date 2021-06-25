import React,{useState, useEffect} from 'react';
import Post from './post';
import Header from './header';

const PostGrid = (props) => {
    const [counter, setCounter] = useState(4);
    
      return (
          <div>
          <Header setCounter={setCounter} counter={counter}/>
            <div className="grid grid-cols-3">
            {props.posts.map((r,id) => (
                <Post key={id} author={r.author.name} title={r.title} body={r.body} />
          ))}
          </div>
          </div>)
}
export default PostGrid