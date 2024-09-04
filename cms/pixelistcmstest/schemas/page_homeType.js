import { defineField, defineType } from 'sanity';

export default defineType({
    name: 'page_homeType',
    title: 'Home Type Page',
    type: 'document',
    fields: [

        defineField({
            name: 'headerTitle',
            title: 'Header title',
            type: 'string',
        }),
        defineField({
            name: 'subTitle',
            title: 'Subtitle',
            type: 'string',
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

    ],
});