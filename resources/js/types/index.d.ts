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
    status: string;
    imagePath: string;
    createdBy: User;
    updatedBy: User;
}

interface Projects {
    data: Project[];
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
    projects: Projects;
};
