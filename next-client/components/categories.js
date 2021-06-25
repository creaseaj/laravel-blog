import React,{useState, useEffect} from 'react';

const CategoriesDiv = (props) => {
       console.log(props);
return(
<div class="absolute py-2 w-32 bg-gray-100 rounded-xl mt-2 z-50 overflow-auto max-h-52">
            {props.categories.map((c,id) => (
                    <a class="block text-left px-3 text-sm leading-6
                        hover:bg-blue-500 focus:bg-blue-500 hover:text-white"
                 href={"/categories/" + c.slug}>{c.name} </a>
          ))}
          </div>)
          }

export default CategoriesDiv
