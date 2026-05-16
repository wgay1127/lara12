import { Head, Link, usePage } from "@inertiajs/react";
import Layout from "@/Layouts/Layout";


const Todos = ({ todos }) => {
    return (
        <Layout>
            <div className="mx-auto max-w-md overflow-hidden rounded-xl bg-white shadow-md md:max-w-2xl">

                <h1 className=" p-4 text-lg font-semibold tracking-wide text-indigo-500">To Dos</h1>
                <p className="p-4 m-2 text-sm font-semibold tracking-wide text-indigo-500">Welcome to the todos page. Here you can manage your tasks.</p>
                <div id="todosList" className="mx-auto max-w-md overflow-hidden rounded-xl bg-[#70ACF9] shadow-md md:max-w-2xl p-2 m-2">
                    {todos.data.map((todo) => (
                        <div className="mx-auto max-w-md overflow-hidden rounded-xl bg-[#2B62A5] shadow-md md:max-w-2xl p-2 m-2">
                            <div key={todo.id}>
                                <h2>{todo.title}</h2>
                                <p>{todo.details}</p>
                                <p>Completed: {todo.completed ? 'Yes' : 'No'}</p>
                                <p><button class=" rounded-full bg-[#70ACF9] hover:bg-[#70ACF9] text-white font-bold py-2 px-2 border border-blue-700 rounded">
                                   <span className="text-sm hover:text-[#000] cursor:pointer">Button</span> 
                                </button></p>
                                <hr width="50%" />
                            </div>
                        </div>
                    ))}
                </div>
                <div className="py-12 px-4">
                    {todos.links.map((link) =>
                        link.url ? (
                            <Link
                                key={link.label}
                                href={link.url}
                                dangerouslySetInnerHTML={{ __html: link.label }}
                                className={`px-4 py-2 rounded ${link.active ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'}`}
                            />
                        ) : (
                            <span
                                key={link.label}
                                dangerouslySetInnerHTML={{ __html: link.label }}
                                className={`px-4 py-2 rounded ${link.active ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'}`}
                            ></span>
                        )
                    )}
                </div>
            </div>
            <div className="mx-auto max-w-md overflow-hidden rounded-xl bg-white shadow-md md:max-w-2xl">
                <div className="md:flex">

                    <div className="p-8">
                        <div className="text-sm font-semibold tracking-wide text-indigo-500 uppercase">Company retreats</div>
                        <a href="#" className="mt-1 block text-lg leading-tight font-medium text-black hover:underline">
                            Incredible accommodation for your team
                        </a>
                        <p className="mt-2 text-gray-500">
                            Looking to take your team away on a retreat to enjoy awesome food and take in some sunshine? We have a list of
                            places to do just that.
                        </p>
                    </div>
                </div>
            </div>
        </Layout>
    )
}

export default Todos;