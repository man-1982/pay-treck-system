import {PageProps} from "@/types";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import {Head, Link} from "@inertiajs/react";

// TODO add types
export default ({auth, projects}:PageProps) => (

    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Projects</h2>}
    >
        <Head title="Projects"/>

        <div className="py-12">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="p-6 text-gray-900 dark:text-gray-100">Projects list</div>
                    <table className={"w-full text-sm text-left text-gray-500 dark:text-gray-500"}>
                        <thead>
                            <tr className={"no-wrap"}>
                                <th className={"px-3 py-2"}>ID</th>
                                <th className={"px-3 py-2"}>Image</th>
                                <th className={"px-3 py-2"}>Name</th>
                                <th className={"px-3 py-2"}>Status</th>
                                <th className={"px-3 py-2"}>Creat date</th>
                                <th className={"px-3 py-2"}>Due date</th>
                                <th className={"px-3 py-2"}>Created by</th>
                                <th className={"px-3 py-2"}>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {projects.data.map((project) => (
                            console.log(project),
                            <tr className={"bg-white border-b dark:bg-gray-800 dark:border-gray-700"}>
                                <td className={"px-3 py-2"}>{project.id}</td>
                                <td className={"px-3 py-2"}>{project.imagePath}</td>
                                <td className={"px-3 py-2 font-bold"}>{project.name}</td>
                                <td className={"px-3 py-2"}>{project.status}</td>
                                <td className={"px-3 py-2 text-nowrap"}>{project.createdAt}</td>
                                <td className={"px-3 py-2 text-nowrap"}>{project.updatedAt}</td>
                                                 {/*users data*/}

                                <td className={"px-3 py-2"}>{project.createdBy.name}</td>
                                <td className={"px-3 py-2 text-right font-medium"}>
                                    <Link href={route('projects.show', project.id)} className={"text-blue-500 " +
                                        "hover:underline mx-1"}>View</Link>
                                    <Link href={route('projects.edit', project.id)} className={"text-blue-500"}>Edit</Link>
                                    <Link href={route('projects.destroy', project.id)} className={"text-red-500"}>Delete</Link>
                                </td>
                            </tr>
                        ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

)
