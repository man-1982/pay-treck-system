import {Link} from "@inertiajs/react";
import {Pagination as PaginationType} from "../types"; // adjust the path to your actual types file

interface Props {
    Paginator: PaginationType;
}

const Pagination: React.FC<Props> = ({Paginator}) => {
    return (
        <nav className={"text-center mt-4"}>
            {Paginator.links.map((link) => (
                <Link
                preserveScroll    
                    key={link.label}
                      href={link.url || ""}
                      className={"inline-block px-3 py-2 mx-1 text-gray-200 rounded-lg " +
                     ( (link.active) ? " bg-gray-950" : "" ) +
                     ( (link.url === null) ? " !text-gray-500 cursor-not-allowed" : "hover:bg-gray-950")}
                >
                    {/*Pass restricted html to component*/}
                    <span dangerouslySetInnerHTML={{__html: link.label}}></span>

                </Link>
            ))}
        </nav>
    );
}

export default Pagination;
