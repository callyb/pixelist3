import { defineConfig } from 'sanity'
import { deskTool } from 'sanity/desk'
import { visionTool } from '@sanity/vision'
import { schemaTypes } from './schemas'
import { noteField } from 'sanity-plugin-note-field';
import { myStructure } from './deskStructure';
import { theme } from 'https://themer.sanity.build/api/hues'

const singletonActions = new Set(["publish", "discardChanges", "restore"])

// Define the singleton document types
const singletonTypes = new Set(["home, about, blog, projects"])

export default defineConfig({
  name: 'default',
  title: 'pixelist_cms_test',

  projectId: '42s1b7jy',
  dataset: 'production',

  plugins: [deskTool({
    structure:
      myStructure,
  }),
  visionTool(),
  noteField(),
    theme],

  schema: {
    types: schemaTypes,

    // Filter out singleton types from the global “New document” menu options
    templates: (templates) =>
      templates.filter(({ schemaType }) => !singletonTypes.has(schemaType)),
  },

  document: {
    // For singleton types, filter out actions that are not explicitly included
    // in the `singletonActions` list defined above
    actions: (input, context) =>
      singletonTypes.has(context.schemaType)
        ? input.filter(({ action }) => action && singletonActions.has(action))
        : input,
  },

  parts: [
    {
      "name": "part:@sanity/base/schema",
      "path": "../src/images/Logo.png",
    }
  ]
})
