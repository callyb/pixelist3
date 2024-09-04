import { defineField, defineType } from 'sanity'

export default defineType({
    name: 'blog',
    title: 'Blog Posts Page',
    type: 'document',
    fields: [

        defineField({
            name: 'headerTitle',
            title: 'Header title',
            type: 'string',
        }),
        defineField({
            name: 'subtitle',
            title: 'Subtitle',
            type: 'string',
        }),
        defineField({
            title: "About the 'alternative text (under the image)'",
            description: "Alternative text, or the 'alt' property of an image is what text readers use to describe an image for people with impaired sight, so if you can put a brief description in this field then it will help your site be more accessible",
            name: 'altTextHeaderImage',
            type: 'note',
            options: {
                tone: 'caution',
            },
        }),
        defineField({
            name: 'headerImage',
            title: 'Header image',
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
            name: 'intro',
            title: 'The introductory body of Text on the page (before the posts)',
            type: 'blockContent',
        }),

    ],
    preview: {
        select: {
            title: 'title',
        },
    },
})
