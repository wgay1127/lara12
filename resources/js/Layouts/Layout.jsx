import { Link } from "@inertiajs/react";
export default function Layout({ children }) {
    return (
       <>
       <div className="bg-[#70acf9] border-b-2 border-gray-300">
            <header>
                <nav>
                    <Link className="nav-link" href="/">Home</Link>
                    <Link className="nav-link" href="/newpage">New Page</Link> 
                </nav>
                
            </header>
        </div>
        <main className="bg-[#2b62a5] h-vh flex items-center justify-center text-white text-2xl">
            {children}
        </main> 
        </>
    )
}0