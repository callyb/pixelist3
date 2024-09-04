import { defineField, defineType } from 'sanity'

export default defineType({
    name: "project",
    title: "Projects",
    type: "document",
    fields: [
        defineField({
            name: "title",
            title: "Title",
            type: "string",
        }),
        defineField({
            name: "date",
            title: "Date",
            type: "datetime",
        }),
        defineField({
            name: "place",
            type: "string",
        }),
        defineField({
            name: "subTitle",
            type: "string",
        }),
        defineField({
            name: "description",
            type: "text",
        }),
        defineField({
            name: "projectType",
            title: "Project Type",
            type: "string",
            options: {
                list: [
                    { value: "personal", title: "Personal" },
                    { value: "client", title: "Client" },
                    { value: "commercial", title: "Commercial" },
                    { value: "application", title: "Application" },
                ]
            }

        }),
        defineField({
            name: "link",
            type: "url",
        }),
        defineField({
            name: "tags",
            type: "array",
            of: [
                {
                    type: "string",
                }
            ],
            options: {
                layout: "tags",
            },
        }),
    ],

});