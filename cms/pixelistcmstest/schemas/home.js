import { defineField, defineType } from 'sanity';
// import { simplerColorInput } from 'sanity-plugin-simpler-color-input'

export default defineType({
    name: 'home',
    title: 'Home Page',
    type: 'document',
    fields: [

        defineField({
            name: 'headerTitle',
            title: 'Header title',
            type: 'string',
            initialValue: 'Pixelist Design',
        }),
        defineField({
            name: 'subTitle',
            title: 'Subtitle',
            type: 'string',
            initialValue: 'Pixelist clients cms test site',
        }),
        defineField({
            title: "About the 'alternative text (under the image)'",
            description: "Alternative text, or the 'alt' property of an image is what text readers use to describe an image for people with impaired sight, so if you can put a brief description in this field then it will help your site be more accessible",
            name: 'altTextBgImage',
            type: 'note',
            options: {
                tone: 'caution',
            },
        }),
        defineField({
            name: 'backgroundImage',
            title: 'Background image',
            type: 'image',
            fields: [
                {
                    name: 'alt',
                    type: 'string',
                    title: 'Alternative text',
                },
            ],
            // initialValue: tbc,
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
            name: 'bodyTitle',
            title: 'Main body of text title',
            type: 'string',
            initialValue: 'Instructions',
        }),
        defineField({
            name: 'body',
            title: 'The main body of Text on the page',
            type: 'blockContent',
            // initialValue: 

        }),

    ],
});