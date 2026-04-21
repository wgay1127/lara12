
export default function Layout({ children }) {
    return (
       <>
       <div className="bg-[#70acf9] border-b-2 border-gray-300">
            <header>
                <nav>
                    <a className="nav-link" href="/">Home</a>
                    <a className="nav-link" href="/newpage">New Page</a> 
                </nav>
                
            </header>
        </div>
        <main className="bg-[#2b62a5] h-dvh flex items-center justify-center text-white text-2xl">
            {children}
        </main> 
        </>
    )
}0