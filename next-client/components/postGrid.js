import React,{useState, useEffect} from 'react';
import Post from './post';
import Header from './header';

const PostGrid = (props) => {

      return (
          <div>

            <div className="grid grid-cols-3">
            {props.posts.map((r,id) => (
                <Post key={id} title={r.title} author={r.author} body={r.body} slug={r.slug} />
          ))}
          </div>
          </div>)
}
export default PostGrid
