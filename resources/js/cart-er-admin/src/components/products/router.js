import productList from './components/list'
import productCreate from './components/create'

const productRouter = [
    {
        path: '/products',
        name: 'Products',
        component: productList
    },
    {
        path: '/products/create',
        component: productCreate
    },
    {
        path: '/products/create',
        component: productList
    },
]

export  default  productRouter