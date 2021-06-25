
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

export default Post
