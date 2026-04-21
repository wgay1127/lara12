import './bootstrap';
import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client';
import "../css/app.css";

createInertiaApp({
    withApp(app, { ssr }) {
        if (!ssr) {
            return <BrowserProvider>{app}</BrowserProvider>
        }

        return app
    },
})