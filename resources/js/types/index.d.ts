import {RouteParams, RouteParamsObject} from "ziggy-js";

export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string;
}



interface Project {
    id: number;
    name: string;
    description: string;
    createdAt: string;
    updatedAt: string;
    dueDate: string;
    status: string;
    imagePath: string;
    createdBy: User;
    updatedBy: User;
}

export interface Pagination {
    current_page: number;
    from: number;
    last_page: number;
    links: Link[];
    path: string;
    per_page: number;
    to: number;
    total: number;
}

interface Projects {
    data: Project[];
    links: [];
    meta: Pagination;
}

interface Link {
    url: string | null;
    label: string;
    active: boolean;
}

type ExtendedRouteParams = RouteParams<string> & {
    name?: string;
    status?: string;
    page?: number;
    sort_field?: string;
    sort_direction?: string;
};


export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
    projects: Projects;
    queryParams?: ExtendedRouteParams | undefined;
};
