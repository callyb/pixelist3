import { defineField, defineType } from 'sanity'

export default defineType({
    name: 'about',
    title: 'About Page Text',
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
            name: 'publishedAt',
            title: 'Published at',
            type: 'datetime',
        }),
        defineField({
            name: 'body',
            title: 'Body',
            type: 'blockContent',
        }),
        defineField({
            title: 'Button Title',
            description: "This is the text inside the button at the bottom of the screen.  Please check any new button titles aren't too long for the button!",
            name: 'buttonTitleNote',
            type: 'note',
            options: {
                tone: 'caution',
            },
        }),
        defineField({
            name: 'buttonTitle',
            title: 'Button title',
            type: 'string',
        }),
        defineField({
            title: 'Email Address - Note',
            description: "This is the email address that the contact form will send to.  Please check that it is correct before publishing the site.",
            name: 'emailNote',
            type: 'note',
            options: {
                tone: 'caution',
            },
        }),
        defineField({
            name: 'emailAddress',
            title: 'Email address',
            type: 'string'
        }),

    ],
    preview: {
        select: {
            title: 'name',
            media: 'image',
        },
    },

})
