
const Post = (props) => {
    return(
        <div className="m-4 py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 className="text-gray-800 text-3xl font-semibold">{props.title}</h2>
                <p className="mt-2 text-gray-600">{props.body}</p>
                <p>{props.slug}</p>
            </div>
            <div className="flex justify-end mt-4">
                <p  className="text-xl font-medium text-indigo-500">{props.author.name}</p>
            </div>

        </div>
    )
}

export default Post
