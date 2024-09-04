import { defineField, defineType } from 'sanity'

export default defineType({
    name: 'page_aboutType',
    title: 'About type page',
    type: 'document',
    fields: [
        defineField({
            name: 'subtitle',
            title: 'Sub Title',
            type: 'string',
        }),
        defineField({
            name: 'author',
            title: 'Author',
            type: 'reference',
            to: { type: 'author' },
        }),
        defineField({
            name: 'mainImage',
            title: 'Main image',
            type: 'image',
            fields: [
                {
                    name: 'alt',
                    type: 'string',
                    title: 'Alternative text',
                },
            ],
            options: {
                hotspot: true,
            },
        }),
        defineField({
            name: 'secondImage',
            title: 'Second image',
            type: 'image',
            fields: [
                {
                    name: 'alt',
                    type: 'string',
                    title: 'Alternative text',
                },
            ],
            options: {
                hotspot: true,
            },
        }),
        defineField({
            name: 'publishedAt',
            title: 'Published at',
            type: 'datetime',
        }),
        defineField({
            name: 'body',
            title: 'Body',
            type: 'blockContent',
        }),
    ],
    preview: {
        select: {
            title: 'name',
            media: 'image',
        },
    },
})
